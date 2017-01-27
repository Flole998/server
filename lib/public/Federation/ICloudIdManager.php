<?php
/**
 * @copyright Copyright (c) 2017, Robin Appelman <robin@icewind.nl>
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\Federation;

/**
 * Interface for resolving federated cloud ids
 *
 * @since 12.0.0
 */
interface ICloudIdManager {
	/**
	 * @param string $cloudId
	 * @return ICloudId
	 *
	 * @since 12.0.0
	 */
	public function resolveCloudId($cloudId);

	/**
	 * Get the cloud id for a remote user
	 *
	 * @param string $user
	 * @param string $remote
	 * @return ICloudId
	 *
	 * @since 12.0.0
	 */
	public function getCloudId($user, $remote);

	/**
	 * Check if the input is a correctly formatted cloud id
	 *
	 * @param string $cloudId
	 * @return bool
	 *
	 * @since 12.0.0
	 */
	public function isValidCloudId($cloudId);
}